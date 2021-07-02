import model.*;
import static ui.UiMenu.*;
import java.util.Date;

public class Main {
    public static void main(String[] args) {
        showMenu();
      /*  model.Doctor myDoctor = new model.Doctor();
        myDoctor.name= "Alejandro Rodriguez";
        myDoctor.showName();
        myDoctor.showId();
       // System.out.println( model.Doctor.id);

        //aqui incrementaremos para comprovar el escoups
        //si no fuera statica no pudiera llevar el control del autoimcremento
        //siempre saldra 1
        //model.Doctor.id++;

        model.Doctor myDoctorAl= new model.Doctor();
        myDoctor.showId();
        //System.out.println(model.Doctor.id);*/

      /*  Doctor myDoctor = new Doctor("Claire Mata","Claire@gmail.com");
       // System.out.println(myDoctor.name);
       // System.out.println(myDoctor.speciality);

        myDoctor.addAvailableAppointment(new Date(), "4pm");
        myDoctor.addAvailableAppointment(new Date(), "10am");
        myDoctor.addAvailableAppointment(new Date(), "1pm");
        System.out.println(myDoctor);*/

        /*for (model.Doctor.AvailableAppointment aA: myDoctor.getAvailableAppointments()) {
            System.out.println(aA.getDate() + "  "+ aA.getTime());
        }

        //polimorfismo
        User user = new Doctor("Anahi","Ana@mail.com");
        user.showDataUser();


        //con ctrl + barra espaciadora luego de new, puedes ver con quien
        //lo podes instanciar
        //y esto es una clase anonima:
        User user1 = new User("anahi", "anaaaaaa") {
            @Override
            public void showDataUser() {
                System.out.println("Doctor\n");
                System.out.println("Hospital: Cruz verde");
                System.out.println("Departamento: Geriatria");
            }
        };

        user1.showDataUser();

        ISchedulable iSchedulable = new ISchedulable() {
            @Override
            public void schedule(Date date, String time) {

            }
        };*/





        //Patient patient = new Patient("Alejandra", "Alejandra@gmail.com");
       // System.out.println(patient);


       /* model.Patient patient2 = new model.Patient("cristian", "Cristian@mail.com");

        System.out.println(patient.getName());
        System.out.println(patient2.getName());
        patient2=patient;

        System.out.println(patient.getName());
        System.out.println(patient2.getName());

        patient2.setName("manuel");
        System.out.println(patient.getName());
        System.out.println(patient2.getName());



        System.out.println(patient.name);
        System.out.println(patient.email);
        patient.weight=60.5;//Kg
        patient.height=1.65;//Mts

// lo pudieramos usar pero pusimos private las cosas
        System.out.println(patient.weight);
        System.out.println(patient.height);

        patient.setWeight(54.6);
        System.out.println(patient.getWeight());

        patient.setPhoneNumber("12345678");
        System.out.println(patient.getPhoneNumber());*/





    }


}
