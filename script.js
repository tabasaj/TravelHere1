function showImages(country) {
    if (country === "India") {
        document.getElementById("images").innerHTML = "<img src='temple1.jpg'><img src='temple2.jpg'>";
    } else if (country === "Brazil") {
        document.getElementById("images").innerHTML = "<img src='beach1.jpg'><img src='beach2.jpg'>";
    }
}
