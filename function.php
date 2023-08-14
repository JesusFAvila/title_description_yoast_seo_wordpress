function custom_yoast_seo_meta_data($title) {
    // Comprobamos si estamos en la página que queremos personalizar (por ejemplo, ID de página 123)
    if(is_page(123)) {
        $title = "Tu título personalizado aquí";
    }
    return $title;
}
add_filter('wpseo_title', 'custom_yoast_seo_meta_data');

function custom_yoast_seo_meta_description($description) {
    // Comprobamos si estamos en la página que queremos personalizar (por ejemplo, ID de página 123)
    if(is_page(123)) {
        $description = "Tu descripción personalizada aquí";
    }
    return $description;
}
add_filter('wpseo_metadesc', 'custom_yoast_seo_meta_description');

// Puedes editar el 123 con el ID de la página que deseas personalizar. Además, reemplaza "Tu título personalizado aquí" y "Tu descripción personalizada aquí" con el título y la descripción que desees.
// Para personalizar el título y la descripción de otras páginas, simplemente añade más condiciones if en las funciones y configura según tus necesidades.


