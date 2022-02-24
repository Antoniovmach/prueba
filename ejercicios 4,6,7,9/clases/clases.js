class cliente{
        cliente(nombre,salario,ingresar,extraer){
            this.nombre = nombre;
            this.extraer = extraer;
            this.ingresar = ingresar;
            this.salario = salario+extraer-ingresar;

        }
        saludar() {
            console.log('${this.salario}');
        }
}

let cliente = new cliente('juan', 0, 3,100);

cliente.saludar();