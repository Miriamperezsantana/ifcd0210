/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pqws;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *+
 * @author pc
 */
@WebService(serviceName = "webS6")
public class webS6 {

    /**
     * This is a sample web service operation
     */
    @WebMethod(operationName = "hello")
    public String hello(@WebParam(name = "name") String txt) {
        return "Hello " + txt + " !";
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "mostrarsaludo")
    public String mostrarsaludo(@WebParam(name = "nombre") String nombre) {
        //TODO write your implementation code here:
        return "Bienvenido " + nombre;
    }
}
