import pymongo

def conectar_db():
    try:
        # Conectar a MongoDB
        cliente = pymongo.MongoClient("mongodb://macias_mongodb:27017/")
        base_de_datos = cliente["bd_productos"]
        
        return base_de_datos
    except pymongo.errors.ConnectionFailure as e:
        # Manejar errores de conexión
        print("Error de conexión a MongoDB:", e)
        return None

