package model;

public abstract class User {// al ponerlo abstracta no se puede instancias nada
    private int id;
    private  String name;
    private  String email;
    private  String address;
    private  String phoneNumber;

    public User(String name, String email) {
        this.name = name;
        this.email = email;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public void setPhoneNumber(String phoneNumber) {
        if (phoneNumber.length()>8){
            System.out.println("el numero telefonico debe ser de 8 digitos");
        }else if (phoneNumber.length()==8){
            this.phoneNumber = phoneNumber;
        }
    }


    @Override//sobreescritura de metodos
    public String toString() {
        return "model.User{" +
                "id=" + id +
                ",\n name='" + name + '\'' +
                ", \nemail='" + email + '\'' +
                ",\n address='" + address + '\'' +
                ", \nphoneNumber='" + phoneNumber + '\'' +
                '}';
        //el super.toString
        //obtiene el nombre de la clase y obtener el identificador
        //es hash code
    }

    public abstract void showDataUser();

}
