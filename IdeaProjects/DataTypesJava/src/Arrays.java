public class Arrays {
    public static void main(String[] args) {
        String[] androidVersions = new String[17];//no mejores usos ara arreglos
        //colocamos new porque es un objeto
        String days[]= new String[7];
        //buen uso psara el arreglo
        //arrego de dos dimensiones
        String[][] cities= new String[4][2];//4*2 = 8 elementos
                     //renglones  columnas
        /*
        * +----------------------+
        * | Country | City       |
        * ------------------------
        * | Mexico  | CDMX       |
        * |Mexico   | Guadalajara|
        * |Colombia | Bogota     |
        * |Colombia | Medellin   |
        * +----------------------+
        */
        int [][][] numbers = new int[2][2][2];
        int [][][][] numbers4=new int[2][3][3][2];

        androidVersions[0]= "Apple Pie";
        androidVersions[1]="Banana Bread";
        androidVersions[2]="Cupcake";
        androidVersions[3]="Donut";
        
        
        
//acceder en for anidados
        //aqui me traera el numero 17 asi que por eso le ponemos -1
        //o lo dejamos < ya que inicia con 0
      /*  for (int i = 0; i <androidVersions.length ; i++) {
            System.out.println(androidVersions[i]);
            //salen null porque solo fueron inicializados pero no
            //se le asigno nada
            //tambien nos imprime null por que ese es por defecto el valor asignado
            //para los String, si imprimieramos el de days nos imprimira
            //solo 0 porque ese es el valor asignado por defecto para los int

        }*/
        //bucle for each
        for (String androidVersion : androidVersions) {
            System.out.println(androidVersion);
        }
        
       /* System.out.println(androidVersions[0]);
        System.out.println(androidVersions[1]);
        System.out.println(androidVersions[2]);
        System.out.println(androidVersions[3]);*/

        System.out.println();
        System.out.println();
        cities[0][0]="Colombia";
        cities[0][1]="Medellin";
        cities[1][0]="Colombia";
        cities[1][1]="Bogota";
        cities[2][0]="Mexico";
        cities[2][1]="Guadalajara";
        cities[3][0]="Mecico";
        cities[3][1]="CDMX";
       /* for (int i = 0; i < cities.length ; i++) {
            for (int j = 0; j <cities[i].length ; j++) {
                System.out.println(cities[i][j]);

            }

        }*/

//foreach anidado
        for (String[] pair:cities) {
            for ( String name :pair ) {
                System.out.println(name);
            }
        }

       /* System.out.println(cities[0][0]);
        System.out.println(cities[0][1]);
        System.out.println(cities[1][0]);
        System.out.println(cities[1][1]);
        System.out.println(cities[2][0]);
        System.out.println(cities[2][1]);
        System.out.println(cities[3][0]);
        System.out.println(cities[3][1]);*/

/*
*  +|--------------------|----------------|---------------|+
*   | |----------|------||                |               |
*   | ||---|----||      ||                |               |
*   | ||   |mono||      ||                |               |
* 1 | ||   |mono||      ||                |               |
*   | ||---|----||      ||                |               |
*   | |-----0----|---1--||                |               |
*   |--------------------|----------------|---------------|
*   |                    |                |               |
*   |                    |                |               |
*   |                    |                |               |
* 0 |                    |                |               |
*   |                    |                |               |
*  +|--------------------|----------------|---------------|+
*           0                 1                   2
 */

        String[][][][] animals = new String[2][3][2][2];
        animals[1][0][0][1]= "mono";
        System.out.println();
        System.out.println();
      //  System.out.println(animals[1][0][0][1]);

        for (int i = 0; i <=1 ; i++) {
            for (int j = 0; j <=0 ; j++) {
                for (int k = 0; k <=0 ; k++) {
                    for (int l = 0; l <=1 ; l++) {
                        System.out.println(animals[i][j][k][l]);

                    }
                    
                }

            }

        }


    }

}
