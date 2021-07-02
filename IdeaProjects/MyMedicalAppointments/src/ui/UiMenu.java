package ui;

import model.Doctor;
import model.Patient;

import java.util.ArrayList;
import java.util.Scanner;

public class UiMenu {

    public static final String[] MONTHS = {"Enero","Febrero", "Marzo", "Abril", "Mayo", "Junio","Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre"};
    public static Doctor doctorLogged;
    public static Patient patientLogged;

    public static void showMenu(){
        System.out.println("Bienbenidooo");
        System.out.println("Seleccione La opcion deseada");

        int response =0;
        do {
            System.out.println("1. Doctor");
            System.out.println("2. Paciente");
            System.out.println("0. Salir");

            Scanner sc = new Scanner(System.in);
            response = Integer.valueOf(sc.nextLine());

            switch (response)
            {
                case 1:
                    System.out.println("Doctor");
                    response=0;
                    authUser(1);
                    break;
                case 2:
                    response =0;
                    authUser(2);
                   // showPatientMenu();
                    break;
                case 0:
                    System.out.println("Gracias por tu visita");
                    break;
                default:
                    System.out.println("porfavor selecciona una opcion correcta");

            }
        }while (response !=0);
    }
//clase SIMULANDO AUTENTICACION DE USUARIO
    private static void authUser(int userType){
        //si userType es = a 1 es un doctor
        //si es 2 es un paciente

        ArrayList<Doctor> doctors = new ArrayList<>();
        doctors.add(new Doctor("Alejandro Martinez", "Alejandro@email.com"));
        doctors.add(new Doctor("Karen Sosa", "karen@email.com"));
        doctors.add(new Doctor("Rocio Gomez", "Rocio@email.com"));

        ArrayList<Patient> patients = new ArrayList<>();
        patients.add(new Patient("Anahi Salgado", "anahi@mail.com"));
        patients.add(new Patient("Roberto Rodriguez", "Robert@mail.com"));
        patients.add(new Patient("Claire Mata", "Claire@mail.com"));

        //identifca si es email es correcto
        boolean emailCorrect= false;
        do {
            System.out.println("Inserta tu email: [a@a.com]");
            Scanner sc = new Scanner(System.in);
            String email = sc.nextLine();
            //verifica si es doctor o paciente
            if (userType==1){
                for (Doctor d: doctors) {
                    if (d.getEmail().equals(email)){
                        emailCorrect = true;
                        //obtener el usuario logeado
                        doctorLogged = d;
                        //el menu que creamos
                        UIDoctorMenu.showDoctorMenu();
                    }
                }
            }
            if (userType==2){
                for (Patient p :patients) {
                    if (p.getEmail().equals(email)){
                        emailCorrect = true;
                        patientLogged = p;
                        //el menu de pacientes
                        UIPatientMenu.showPatientMenu();
                    }
                }

            }

        }while (!emailCorrect);

    }

     static void showPatientMenu(){
        int response = 0;
        do {
            System.out.println("\n\n");
            System.out.println("Paciente");
            System.out.println("1. reservar una cita");
            System.out.println("2. Mis Citas");
            System.out.println("0. Regresar");

            Scanner sc = new Scanner(System.in);
            response = Integer.valueOf(sc.nextLine());

            switch (response){
                case 1:
                    System.out.println("::Reservar una cita");
                    for (int i = 0; i <3; i++) {
                        //mostrar la lista de los primeros 3 meses
                        System.out.println((1+i)+"." + MONTHS[i]);
                    }
                    break;
                case 2:
                    System.out.println("::Mis citas");
                    break;
                case 0:
                    showMenu();
                    break;
                default:
                    System.out.println("por favor, seleccione una opcion correcta");


            }

        }while (response !=0);
    }

}
