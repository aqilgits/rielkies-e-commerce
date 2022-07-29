function sidebarOpen(){
    document.getElementById('sideBar').style.display = 'block';
    document.getElementById('sideBar').style.position = 'fixed';
    document.getElementById('sideBar').style.height = '100%';
    document.getElementById('sideBar').style.top = '0';
    document.getElementById('sideBar').style.zIndex = '9999';
    document.getElementById('sideBar').style.animation = 'open ease-in 0.5s';
    document.getElementById('header').style.display = 'none';
}
function sidebarClose(){
    document.getElementById('sideBar').style.animation = 'close ease-out 0.3s';
    document.getElementById('sideBar').style.top = '-100%';
    document.getElementById('header').style.display = '';
}