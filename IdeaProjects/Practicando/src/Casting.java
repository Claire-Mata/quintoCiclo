public class Casting {
    public static void main(String[] args) {
        //Usando los dos tipos de casting que aprendiste (implícito y explícito),
        // resuelve los siguientes casteos indicando qué tipo es y
        // si se está calculando estimación o exactitud.
        //Z a entero
        char c = 'Z';
        int cI= c;
        //explicito
        short cS=(short) c;
        System.out.println(cS);
        //convirtiendo a long
        int i = 250;
        long iL= i;
        System.out.println(iL);
        //convirtiendo a short
        short iS=(short) iL;
        System.out.println(iS);
        //de double a long
        double d=301.067;
        long dL= (long) d;
        System.out.println(dL);
        //convirtiendo a float
        int i2=100;
        float i2F=(float) (i2+5000.66);
        System.out.println(i2F);
        //convirtiendo a byte
        int i3=737;
        byte i3B= (byte) (i3*100);
        System.out.println(i3B);
        //convietiendo a long
        double d2=298.638;
        long d2L=(long) (d2/25);
        System.out.println(d2L);

    }
}
