import axios from 'axios';
import NProgress from 'nprogress';
import Router from '../util/Router';
import Modernizr from 'modernizr';
const parser = new DOMParser();
window.onpopstate = function(event) {
    if (event.state === null){
        return;
    }
    pjaxUrl(document.location,false);
};
var isExternalRegex = function(url) {
    var domainRe = /https?:\/\/((?:[\w\d]+\.)+[\w\d]{2,})/i;
    if (!domainRe.test(url)){
        return false;
    }
    function domain(url) {
        return domainRe.exec(url)[1];
    }

    return domain(location.href) !== domain(url);
};
const pjaxUrl = function(url, pushState = true){
    document.querySelector('html').classList.add('pjax_enabled');
    NProgress.start();
    axios.get(url,{
        onDownloadProgress: function () {
            NProgress.inc();
        },
    })
        .then(function (response) {
            var el = parser.parseFromString(response.data, 'text/html');
            const newBody = el.querySelector('body');
            document.body.className = newBody.className;
            document.body.innerHTML = newBody.innerHTML;
            window.scrollTo(0,0);
            Router.loadEvents();
            NProgress.done();
            if (pushState && Modernizr.history){
                history.pushState(url, '', url);
            }
        })
        .catch(function () {
            window.location = url;
        });
};
const attachLinkEvent = function(){
    const links = document.querySelectorAll('a:not([pjax_ready])');
    links.forEach(function(link){
        if (typeof link.dataSet !== 'undefined' && typeof link.dataSet['external'] !== 'undefined'){
            return;
        }
        if (link.classList.contains('ab-item')){
            return;
        }
        const linkUrl = link.getAttribute('href');
        if (/^(tel|mailto|file|ftp):/.test(linkUrl)){
            return;
        }
        if (linkUrl === '#' || linkUrl === ''){
            return;
        }
        if (isExternalRegex(linkUrl)){
            return;
        }
        link.addEventListener('click', function(e){
            e.preventDefault();
            pjaxUrl(linkUrl);
        });
        link.classList.add('pjax_ready');
    });
};
export default {
    init() {
        attachLinkEvent();
    },
    finalize() {

    },
};
