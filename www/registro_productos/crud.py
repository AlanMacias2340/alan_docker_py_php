from bd_mongo import conectar_db

# Función para crear un nuevo producto (Crear)
def crear_producto(json):
    base_de_datos = conectar_db()
    if base_de_datos is not None:
        coleccion_productos = base_de_datos["productos"]#crea la tabla productos dentro del BD
        producto = {"nombre": json['nombre'], "precio": json['precio'], "cantidad": json['cantidad']}
        resultado = coleccion_productos.insert_one(producto)#incerta un producto
        print("Producto creado con ID:", resultado.inserted_id)
        return resultado.inserted_id
    else:
        return None