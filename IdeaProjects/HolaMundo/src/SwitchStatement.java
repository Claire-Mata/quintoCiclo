public class SwitchStatement {
    public static void main(String[] args) {
        String colorModeSelected = "Dark";

        switch (colorModeSelected){
            case "light":
                System.out.println("Seleccionaste light mode");
                break;
            case "Night": //ambar
                System.out.println("seleccionaste night mode");
            case "blue dark":
                System.out.println( "seleccionaste blue dark mode");
                break;
            case "Dark":
                System.out.println("seleccionaste dark mode");
                break;
            default:
                System.out.println("seleccione una opcion correcta");
        }
    }
}
