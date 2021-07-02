public class MatematicOperations {
    public static void main(String[] args) {
        double x =2.1;
        double y =3;
        System.out.println(Math.PI);
        System.out.println(Math.E);
        //hace como redondeo hacia arriba
        System.out.println(Math.ceil(x));
        //devuelve un entero hacia abajo
        System.out.println(Math.floor(x));
        //devuelve un numeero elevado a otro numero
        System.out.println(Math.pow(x,y));
        //dato mas grande entre los dos
        System.out.println(Math.max(x,y));
        //devuelve la raiz cuadrada
        System.out.println(Math.sqrt(y));

        //calcular el area de un circulo
        //pi * r^2
        System.out.println(Math.PI* Math.pow(y,2));
        //area de una esfera
        //4 * PI * r^2
        System.out.println(4* Math.PI * Math.pow(y,2));
        //volumen de una esfera
        //(4/3)*PI * r^3
        System.out.println((4/3)* Math.PI* Math.pow(y,3));
    }
}
