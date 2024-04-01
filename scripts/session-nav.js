document.addEventListener("DOMContentLoaded", () => {
    var storage_key = "activeTab"
    var lastActiveTab =  sessionStorage.getItem(storage_key)

    if(lastActiveTab === null) lastActiveTab = 1


    var tabLink = document.querySelector('a[href="?tb='+ lastActiveTab + '"]')

    if(tabLink) {
        tabLink.click();
    }
    else {
        clearKey();
    }


    const links = document.querySelectorAll(".session-active");

    links.forEach(link => {
        link.addEventListener("click", () => {
            var tabNumber = link.getAttribute('href').split('=')[1];
            sessionStorage.setItem(storage_key, tabNumber);
        })
    })


});



function clearKey() {
    var records_key = document.querySelector(a['href="?tb=1"'])

    if(records_key) records_key.click()
}