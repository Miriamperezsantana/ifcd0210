/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.example;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author pc
 */
@WebService(serviceName = "Calculadora")
public class Calculadora {


    /**
     * Web service operation
     */
    @WebMethod(operationName = "Sumar")
    public String Sumar(@WebParam(name = "i") float i, @WebParam(name = "j") float j) {
       float res = i + j; 
       return (Float.toString (res));
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "Resta")
    public String Resta(@WebParam(name = "i") float i, @WebParam(name = "j") float j) {
       float res = i - j; 
       return (Float.toString (res));
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "Multiplicacion")
    public String Multiplicacion(@WebParam(name = "i") float i, @WebParam(name = "j") float j) {
       float res = i * j; 
       return (Float.toString (res));
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "Division")
    public String Division(@WebParam(name = "i") float i, @WebParam(name = "j") float j) {
       float res = i / j; 
       return (Float.toString (res));
    }
}
