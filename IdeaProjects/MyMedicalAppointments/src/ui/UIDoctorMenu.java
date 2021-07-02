package ui;

import model.Doctor;

import java.util.ArrayList;
import java.util.Scanner;

//CLASE MODULARIZANDO LA UI DE DOCTORES
public class UIDoctorMenu {
    public static ArrayList<Doctor>  doctorsAvailableAppointments = new ArrayList<>();

    //logica de opciones de nuestro doctor
    public static void showDoctorMenu(){
        int response = 0;
        do {
            System.out.println("\n\n");
            System.out.println("Doctor");
            System.out.println("Bienvenido "+ UiMenu.doctorLogged);
            System.out.println("1. add Available Appointment");
            System.out.println("2.My scheduled appointment");
            System.out.println("0. Logout");

            Scanner sc = new Scanner(System.in);
            response = Integer.valueOf(sc.nextLine());

            switch (response){
                case 1:
                    showAddAvailableAppintmentsMenu();
                    break;
                case 2:
                    break;
                case 0:
                    UiMenu.showMenu();
                    break;
                default:
                    System.out.println("Ingrese una opcion correcta");
            }
        }while (response!=0);
    }

    private  static void showAddAvailableAppintmentsMenu(){
        int response = 0;
        do {
            System.out.println("\n\n");
            System.out.println(":: add Available Appointment ");
            System.out.println(":: Select a Month");

            for (int i = 0; i <3 ; i++) {
                int j = i +1;
                System.out.println(j + "." + UiMenu.MONTHS[i]);
            }
            System.out.println("0. Return");

            Scanner sc = new Scanner(System.in);
            response = Integer.valueOf(sc.nextLine());

            if (response > 0 && response <4 ){
                // 1,2,3
                int monthSelected= response;
                System.out.println(monthSelected+ " ."+ UiMenu.MONTHS[monthSelected-1]);

                System.out.println("Inserte la fecha que quieres definir: [dd/mm/yyy]");
                String date = sc.nextLine();

                System.out.println("tu fecha es: "+ date+"\n 1.Correct \n2.Cambiar fecha");
                //CLASE DEFINIENDO LAS CITAS DISPONIBLES
                int responseDate = Integer.valueOf(sc.nextLine());
                if (responseDate==2) continue;//vuelve a iniciar no sale del ciclo


                int responseTime = 0;
                String time ="";
                do {
                    System.out.println("Insert the time available for date: "+ date+ "[16:00]");
                    time=sc.nextLine();
                    System.out.println("tu hora es: "+time+ "\n1. correcto \n2. cambiar hora");
                    responseTime=Integer.valueOf(sc.nextLine());



                }while (responseTime==2);
                UiMenu.doctorLogged.addAvailableAppointment(date, time);
                checkDoctorAvailableAppointments(UiMenu.doctorLogged);


            }else if (response ==0){
                showDoctorMenu();
            }

        }while (response !=0);
    }

    private  static void checkDoctorAvailableAppointments(Doctor doctor){
        if (doctor.getAvailableAppointments().size()>0 && !doctorsAvailableAppointments.contains(doctor)){
            doctorsAvailableAppointments.add(doctor);
        }
    }

}
