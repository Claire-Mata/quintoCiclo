package model;

import model.User;

import java.util.ArrayList;
import java.util.Date;

public class Patient extends User {


    private String birthday;
    private double weight;
    private double height;
    private String blood;
    //las citas que puede ejecutar el paciente
    private ArrayList<AppointmentDoctor> appointmentDoctors = new ArrayList<>();
    private ArrayList<AppointmentNurse> appointmentNurses = new ArrayList<>();

    public ArrayList<AppointmentDoctor> getAppointmentDoctors() {
        return appointmentDoctors;
    }

    public void addAppointmentDoctors(Doctor doctor, Date date, String time) {
        AppointmentDoctor appointmentDoctor= new AppointmentDoctor(this, doctor);
        appointmentDoctor.schedule(date, time);
        appointmentDoctors.add(appointmentDoctor);
    }

    public ArrayList<AppointmentNurse> getAppointmentNurses() {
        return appointmentNurses;
    }

    public void setAppointmentNurses(ArrayList<AppointmentNurse> appointmentNurses) {
        this.appointmentNurses = appointmentNurses;
    }

    // al darle alt + enter te dice el error
     public Patient(String name, String email){
         super(name, email);//hace referencia al padre
    }

    public void setWeight(double weight){
        this.weight = weight;
    }

    public String getWeight(){
        return this.weight + " Kg.";
    }



    public String getHeight() {
        return height + "Mts.";
    }

    public void setHeight(double height) {
        this.height = height;
    }


    public String getBirthday() {
        return birthday;
    }

    public void setBirthday(String birthday) {
        this.birthday = birthday;
    }


    public String getBlood() {
        return blood;
    }

    public void setBlood(String blood) {
        this.blood = blood;
    }

    // para que te genere los getters y setters dale
    //ctrl + n dale en actions, escribes
    //Getters y te aparece "Getters and Setters
    //le das click y ya te aparece a que le quieres hacer
    //con shift y las flechitas seleccionas todas y le das enter y ya :3


    @Override
    public String toString() {
        return super.toString() +"\nAge: "+ birthday+ "\n Weight: "+ getWeight()+ "\n Height: "+ getHeight()+ "\n Blood: "+ blood;
    }

    @Override
    public void showDataUser() {
        System.out.println("Paciente");
        System.out.println("Historial completo desde nacimiento");
    }
}
