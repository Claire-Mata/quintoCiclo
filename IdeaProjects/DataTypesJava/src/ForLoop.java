public class ForLoop {
    static boolean isTurnOnLight = false;
    public static void main(String[] args) {

        turnOnOffLiight();
        for (int i = 1; i <= 10; i++) {
            printSOS();
        }

    }
    public static void printSOS(){

        System.out.println(". . . _ _ _ . . .");
    }

    public static boolean turnOnOffLiight(){
        isTurnOnLight=(isTurnOnLight)?false:true;
        //lo que hace esto es cuado esta true se vuelva
        //false, nos ahorramos los if & else

        return isTurnOnLight;
    }
}
