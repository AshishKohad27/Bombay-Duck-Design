let arcsec_img = document.querySelectorAll(".arcsec-img>img");
let arcsec_div = document.querySelectorAll(".arcsec-img");
let arcsec_video = document.querySelectorAll(".arcsec-video");
// Convert collection to an array using spread syntax
let arcsec_img_array = [...arcsec_img];
let arcsec_div_array = [...arcsec_div];
let arcsec_video_array = [...arcsec_video];
let subDiv;
let store;
let storeImg;
let storeVideo;
let storeIndex = -1;

arcsec_img_array.map((item, index) => {
    item.addEventListener("click", (e) => {
        if (storeIndex !== index) {
            // now removing previous item popup
            if (storeIndex !== -1) {
                console.log(store);
                store.removeChild(subDiv);
                storeImg.style.display = "block";
                storeVideo.style.display = "none";
            }

            // dispaly:none image container and video tag will be block
            arcsec_img[index].style.display = "none";
            arcsec_video[index].style.display = "block";


            // Creating tags and append to our html file
            subDiv = document.createElement("div");
            subDiv.classList.add("arcsec-imgpop");
            let headingDiv = document.createElement("div");
            let heading = document.createElement("h1");
            heading.innerHTML = "Tubelight Films"
            let closePopup = document.createElement("h1");
            closePopup.innerHTML = "x";
            closePopup.addEventListener("click", (e) => {
                removingPopUp(index);
            })
            let desc = document.createElement("p");
            desc.innerHTML = "Illustrative Identity and website design for advertising film production house - Tubelight Films"

            // incease all div heights
            arcsec_img_array.forEach((ele, index) => {
                arcsec_div[index].style.height = "324px";
            });

            //store particular div, img, video tag for removing purpose whenever we click on any new div
            store = arcsec_div[index];
            storeImg = arcsec_img[index];
            storeVideo = arcsec_video[index];

            //appending data inside arcsec_div with particular index
            headingDiv.append(heading, closePopup);
            subDiv.append(headingDiv, desc);
            arcsec_div[index].appendChild(subDiv);

            storeIndex = index;
        }
        else {
            removingPopUp(index);
        }

    });
});


function removingPopUp(index) {


    // dispaly:block image container and video tag will be none
    arcsec_img[index].style.display = "block";
    arcsec_video[index].style.display = "none";

    arcsec_img_array.forEach((item, index) => {
        arcsec_div[index].style.height = "205px";
    });

    //set to default
    if (store && store.contains(subDiv)) {
        store.removeChild(subDiv);
    }
    store = null;
    subDiv = null;
    storeIndex = -1;
}