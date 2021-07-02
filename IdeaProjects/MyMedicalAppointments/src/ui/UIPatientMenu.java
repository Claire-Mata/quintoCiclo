package ui;

//CLASE MODULARIZANDO EL UI DE PACIENTE
import model.Doctor;

import java.util.ArrayList;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class UIPatientMenu {

    public static void showPatientMenu(){
        int response=0;
        do {
            System.out.println("\n\n");
            System.out.println("Paciente");
            System.out.println("welcome: "+UiMenu.patientLogged.getName());
            System.out.println("1. hacer una cita");
            System.out.println("2. mis citas");
            System.out.println("0. logout");

            Scanner sc = new Scanner(System.in);
            response = Integer.valueOf(sc.nextLine());

            switch (response){
                case 1:
                    showBookAppointmentMenu();
                    break;
                case 2:
                    showPatientMyAppointments();
                    break;
                case 0:
                    UiMenu.showMenu();
                    break;
            }
        }while (response!=0);
    }

    private static void showBookAppointmentMenu(){
        int response =0;
        do {
            System.out.println("::Hcer una cita");
            System.out.println(":: Seleccione la fecha");
            //numeracion de la lista de fechas
            //indice de la fecha seleccionada
            //cada doctor recordemos que tiene una arrays
            //[doctors]
            //1.-doctor1
                  //-1 fecha1
                    //2-fecha2
            //2.-doctor2
            //y asi
            Map<Integer, Map<Integer, Doctor>> doctors = new TreeMap<>();
            int k=0;
            for (int i = 0; i < UIDoctorMenu.doctorsAvailableAppointments.size(); i++) {
                ArrayList< Doctor.AvailableAppointment> availableAppointments
                        =UIDoctorMenu.doctorsAvailableAppointments.get(i).getAvailableAppointments();
                Map<Integer,Doctor> doctorAppointments = new TreeMap<>();
                for (int j = 0; j < availableAppointments.size(); j++) {
                    //aqui capturamos los numeros de doctores
                    //1. (estos)doctor1
                    k++;
                    System.out.println(k+ " ." +availableAppointments.get(j).getDate());
                    //aqui capturamos el indice de la fecha
                    doctorAppointments.put(Integer.valueOf(j), UIDoctorMenu.doctorsAvailableAppointments.get(i));//insertar en un map

                    doctors.put(Integer.valueOf(k), doctorAppointments);
                }
            }
            Scanner sc = new Scanner(System.in);
            int responseDateSelected = Integer.valueOf(sc.nextLine());
            Map<Integer, Doctor> doctorAvailableSelected = doctors.get(responseDateSelected);
            Integer indexDate =0;
            Doctor doctorSelected = new Doctor("","");
            //aqui entreamos en el primer map que hicimos
            //entryset es la manera en la que podemos tener acceso para recorrer nuestro Map
            for (Map.Entry<Integer,Doctor > doc:doctorAvailableSelected.entrySet()) {
                //buscamos el indice seleccionado de la fecha
                indexDate = doc.getKey();//obtenemos el numero
                doctorSelected = doc.getValue();//obtener el valor

            }
            System.out.println(doctorSelected.getName()+ ". Date: "+
                    doctorSelected.getAvailableAppointments().get(indexDate).getDate()+
                    ". Time:"+ doctorSelected.getAvailableAppointments().get(indexDate).getTime());
            System.out.println("confirma si esta bien tu cita:  \n1. yes \n2. carmbiar datos");
            response =Integer.valueOf(sc.nextLine());
            if (response==1){
                UiMenu.patientLogged.addAppointmentDoctors(doctorSelected, doctorSelected.getAvailableAppointments().get(indexDate).getDate(null),
                        doctorSelected.getAvailableAppointments().get(indexDate).getTime());
                showPatientMenu();
            }


        }while (response!=0);
    }

    private static void showPatientMyAppointments(){
        int response=0;
        do {
            System.out.println("::Mis Citas");
            if (UiMenu.patientLogged.getAppointmentDoctors().size()==0){
                System.out.println("no tienes citas");
                break;
            }
            for (int i = 0; i < UiMenu.patientLogged.getAppointmentDoctors().size(); i++) {
                int j=i+1;
                System.out.println(j+ ". "+
                        "Dtae: " + UiMenu.patientLogged.getAppointmentDoctors().get(i).getDate()+
                        " Time: "+UiMenu.patientLogged.getAppointmentDoctors().get(i).getTime() +
                        "\n Doctor: " + UiMenu.patientLogged.getAppointmentDoctors().get(i).getDoctor()
                        );

            }
            System.out.println("0. return");

        }while (response !=0);
    }
}
