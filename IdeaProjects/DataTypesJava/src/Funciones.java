public class Funciones {
    public static void main(String[] args) {
        double y=3;
        //calcular el area de un circulo
        //pi * r^2
        circleArea(y);
        System.out.println(circleArea(y));

        //area de una esfera
        //4 * PI * r^2
        sphereArea(y);
        System.out.println(sphereArea(y));

        //volumen de una esfera
        //(4/3)*PI * r^3
        sphereVolumen(y);
        System.out.println(sphereVolumen(y));
        System.out.println("PESOS A DOLARES: "+ converToDolar(1000, "COP"));
    }

    public static double circleArea( double r){
        return Math.PI* Math.pow(r,2);

    }
    public static double sphereArea(double r){
        return 4* Math.PI * Math.pow(r,2);
    }
    public static double sphereVolumen(double r){
        return (4/3)* Math.PI* Math.pow(r,3);
    }

    public static double converToDolar(double quantity, String currency){
        //MXN or COP
        switch (currency){
            case "MXM":
                quantity = quantity * 0.052;
                break;
            case "COP":
                quantity= quantity * 0.00031;
                break;
        }
        return quantity;
    }

}
