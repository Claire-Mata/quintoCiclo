public class IfStatement {
    public static void main(String[] args) {
        boolean isBluetoothEnabled = false;
        int fileSended= 3;

        if (isBluetoothEnabled){
            //Send file
            fileSended++;
            System.out.println("Archivo Enviado");

        }else{
            System.out.println("por favor enciende tu Bluetooth para iniciar la transferencia");
        }

        System.out.println(isBluetoothEnabled);
        System.out.println(fileSended);
    }
}
