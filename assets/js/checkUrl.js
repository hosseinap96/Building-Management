const pathname = window.location.pathname;

switch (pathname) {
    case '/building/index.php':
        alert(pathname);
        document.getElementById('formPage').classList.remove('active');
        document.getElementById('indexPage').classList.add('active');
        break;
    case '/building/form.php':
        alert(pathname);
        document.getElementById('indexPage').classList.remove('active');
        document.getElementById('formPage').classList.add('active');
        break;

    default:
    // code block
}