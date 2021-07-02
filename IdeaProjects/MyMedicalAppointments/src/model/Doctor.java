package model;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;

public class Doctor extends User {
    //atributos
    //array de fechas disponibles
    private ArrayList<AvailableAppointment> availableAppointments = new ArrayList<>();
    private String speciality;

    public String getSpeciality() {
        return speciality;
    }

    public void setSpeciality(String speciality) {
        this.speciality = speciality;
    }

   public Doctor(String name, String email){
        super(name, email);

    }
    //comportamientos
    //aqui se acumulan las citas

    public void addAvailableAppointment(String date, String time){
        availableAppointments.add(new Doctor.AvailableAppointment(date, time));
    }
    //devolver la lista completa de citas
    public ArrayList<AvailableAppointment> getAvailableAppointments(){
        return availableAppointments;
    }

    @Override
    public String toString() {
        return super.toString() //aqui traemos el de la clase user
        +"\n Speciality: "+ speciality+ "\n Available: "+availableAppointments.toString();

    }

    @Override
    public void showDataUser() {
        System.out.println("Empleado del Hospital: Cruz Roja");
        System.out.println("Departamento: Cancerologia");

    }

    //clase anidada
    public  static class AvailableAppointment{
        private int id;
        private Date date;
        private String time;
        //esto nos ayuda a darle el formato que queremos
        SimpleDateFormat format = new SimpleDateFormat("dd/MM/yyyy");

        public AvailableAppointment(String date, String time){
            try {
                // Transformar fechas de formato String a Date:
                this.date=format.parse(date);
                // Transformar fechas de formato Date a String:
                //this.date = format.format(dateAsDate);
            } catch (ParseException e) {
                //ponemos la validacion de nuestro error
                e.printStackTrace();
            }
            this.time=time;
        }

        public int getId() {
            return id;
        }

        public void setId(int id) {
            this.id = id;
        }

        public Date getDate(String DATE) {
            return date;
        }
        public String getDate() {

// Transformar fechas de formato Date a String:

            return format.format(date);
        }
        public void setDate(Date date) {
            this.date = date;
        }

        public String getTime() {
            return time;
        }

        public void setTime(String time) {
            this.time = time;
        }

        @Override
        public String toString() {
            return "Available Appointment \nDate: "+date+ "\n Time: "+ time ;
        }
    }




}
