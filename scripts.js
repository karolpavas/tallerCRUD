function deleteProduct(product) {
    if (confirm(`¿Eliminar producto? \nID: ${product.id_product}\nNombre: ${product.name}`)) {
        window.location.replace(`?page=delete&id=${product.id_product}`);
    }
}