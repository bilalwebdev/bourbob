function change_product_img(img) {

    jQuery(".big-image-container").html(
        '<a ><img src="' +
        img +
        '" class="rounded-lg bg-gray-400"></a>'
    );
}
