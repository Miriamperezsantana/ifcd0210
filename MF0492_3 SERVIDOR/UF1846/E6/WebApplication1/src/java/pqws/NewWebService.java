
package pqws;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

@WebService(serviceName = "NewWebService")
public class NewWebService {

    @WebMethod(operationName = "hola")
    public String hello(@WebParam(name = "name") String txt) {
        return "Hola " + txt + " !";
    }



   
    @WebMethod(operationName = "mostrarsaludo")
    public String mostrarsaludo2(@WebParam(name = "nombre") String nombre) {
        //TODO write your implementation code here:
        return "bienvenido" + nombre ;
    }

    /**
     * Web service operation
     * @param java
     * @return 
     */
    @WebMethod(operationName = "mostrardespedida")
    public String mostrardespedida(@WebParam(name = "nombre") String java) {
        String nombre = null;
        //TODO write your implementation code here:
        return "Hasta pronto" + nombre ;
    }
}

