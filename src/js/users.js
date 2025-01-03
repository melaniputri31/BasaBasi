const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
}

searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    if (searchTerm != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }
        //let's start AJAX
        let xhr = new XMLHttpRequest(); // creating XML object
        xhr.open("POST", "./src/php/search.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    usersList.innerHTML = data;
                }
            }
        }
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // setting request header to send data in URL encoded format
    xhr.send("searchTerm=" + searchTerm); // sending request
}

setInterval(() => {
        //let's start AJAX
        let xhr = new XMLHttpRequest(); // creating XML object
        xhr.open("GET", "./src/php/users.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (!searchBar.classList.contains("active")) { // if active class not contains in search bar then load users list
                        usersList.innerHTML = data;
                    }
                }
            }
        }
    xhr.send(); // sending request
}, 400); //this function will run frequently after 400ms
