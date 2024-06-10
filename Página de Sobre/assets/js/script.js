var header = document.getElementById('header');
var navigationHeader = document.getElementById('navigation_header');
var showSidebar = false;

function menuShow(){
    showSidebar = !showSidebar
    if(showSidebar){
        navigation_header.style.display = 'flex';
        navigation_header.style.marginRight = '0vw';
        navigation_header.style.animationName = 'showSidebar';
    }

    else{
        navigation_header.style.display = '';
        navigation_header.style.marginRight = '-100vw';
        navigation_header.style.animationName = '';
    }
}
