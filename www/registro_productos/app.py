from crud import crear_producto

from flask import Flask, render_template,request,jsonify


app = Flask(__name__)

@app.route('/')
def mostrar_formulario():
    return render_template('registro_productos.html')

@app.route('/procesar', methods=['POST'])
def procesar_formulario():
    nombre = request.form['nombre']
    precio = request.form['precio']
    cantidad = request.form['cantidad']
    datos = {
        'nombre':nombre,
        'precio':precio,
        'cantidad':cantidad
    }
    crear_producto(datos)
    return "Exito"

if __name__ == '__main__':
    app.run(debug=True)

