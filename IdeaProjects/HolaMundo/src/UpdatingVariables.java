public class UpdatingVariables {
    public static void main(String[] args) {
        int salary =1000;
        // bono $200
        salary= salary+200;
        System.out.println(salary);

        //pension: $50 descuento
        salary= salary - 50;
        System.out.println(salary);

        //2 horas extras $30 c/u
        //cupon de comida:$45

        salary=salary +(30*2)- 45;
        System.out.println(salary);

        //Actualizando cadenas de texto

        String employeeName= "Alejandra Mata";
        employeeName = employeeName + " Aguilar";
        System.out.println(employeeName);

        employeeName = "Claire "+ employeeName;
        System.out.println(employeeName);

    }
}
