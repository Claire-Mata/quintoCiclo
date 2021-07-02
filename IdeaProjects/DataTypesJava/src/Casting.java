public class Casting {
    public static void main(String[] args) {
        //en un anio yo soy una amante de animales,
        //asi que ubique en lugares 30 perros
        //quiero saber cuantos perritos ubique al mes

        double monthlyDogs=30.0/12.0;
        System.out.println(monthlyDogs);

        //estimacion se hace casting ((int))
        int estimatedMonthlyDogs = (int) monthlyDogs;
        System.out.println(estimatedMonthlyDogs);

        //exactitud
        int a =30;
        int b=12;
        //se hace casting
        System.out.println((double) a/b);

        double c = a/b;//casting automatico
        System.out.println(c);
        double d = (double) a/b;//no es automatico y es exacto
        System.out.println(d);

        //aqui se castea, se convierte a int
        char n = '1';
        int nI = n;
        System.out.println(nI);
        //casting explicito
        short nS = (short) n;
        System.out.println(nS);

    }
}
