public class IncrementDecrement {
    public static void main(String[] args) {
        int lives = 5;
        lives = lives-1;
        System.out.println(lives);//4
        lives--;//Decremente posfija
        System.out.println(lives);//3

        lives++;//incremtento posfija
        System.out.println(lives);//4

        //prefija
        //gana un regalo por ganar una vida
        int gift=100 + ++lives;// live ++ =posfijo, se accede al dato de la variable sin importar si esta incrementado
        //y despues la incrementa  por eso 104
        System.out.println(gift);
        System.out.println(lives);//5
        //si queres que aparte del regalo se le sume una vida seria:
       // int gift2= 100 + ++lives;//prefijo
       // System.out.println(gift2);
    }
}
