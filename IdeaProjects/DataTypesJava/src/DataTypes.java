public class DataTypes {
    public static void main(String[] args) {
        int n=1234567890;//digitos del 10 numeros
        //para que me lo reconozca como un tipo de dato long se coloca la L al final
        long nL=12345678901L;//digitos de longitud de diferencia con la L al final
        double nD=123.456;//digitos de tipo Double
        float nF=123.456F;//digito de tipo float se identicfica con la letra F al final
        //Lo interesante entre el double y el flotante es que aunque tengas el mismo valor, float lo que hace es redondear (aproximar) el valor.
        //En el siguiente ejemplo vemos las 2 variables con el mismo valor pero lo que se imprime es diferente.
        //__

        var salary = 1000;//int
        //pension 3% de lo que gane
        var pension = salary*0.03;//double
        var totalSalary= salary - pension;//double

        System.out.println(salary);
        System.out.println(pension);
        System.out.println(totalSalary);

        var employeeName= "Claire Aguilar ";
        System.out.println("Trabajador es: "+ employeeName+ " Salario: "+ totalSalary);

        //para correr nuestro .jar es pocicionandonos... olvidalo le tome captura buscalo en el libreoffice
    }
}
