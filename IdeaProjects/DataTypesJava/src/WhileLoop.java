public class WhileLoop {

    static boolean isTurnOnLight = false;

    public static void main(String[] args) {
        turnOnOffLiight();
        int i=1;
        while (isTurnOnLight && i<= 10){
            printSOS();
            i++;
        }


    }

    public static void printSOS(){
        System.out.println(". . . _ _ _ . . .");
    }

    public static boolean turnOnOffLiight(){
        isTurnOnLight=(isTurnOnLight)?false:true;//lo que hace esto es cuado esta true se vuelva
        //false, nos ahorramos los if & else

        return isTurnOnLight;
    }
}
