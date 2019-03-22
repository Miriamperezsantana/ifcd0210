package practicaE2;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.Color;
import javax.swing.JLabel;
import javax.swing.JTextField;
import java.awt.Font;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class Tarea extends JFrame {

	private JPanel contentPane;
	private JTextField txt_nombre;
	private JTextField textField;
	private JTextField textField_1;
	private JTextField textField_2;
	private JTextField textField_3;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Tarea frame = new Tarea();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Tarea() {
		setTitle("Incripcion ");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setForeground(Color.PINK);
		contentPane.setBackground(Color.GRAY);
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNombre = new JLabel("Nombre:");
		lblNombre.setFont(new Font("Comic Sans MS", Font.PLAIN, 11));
		lblNombre.setBounds(44, 56, 46, 14);
		contentPane.add(lblNombre);
		
		txt_nombre = new JTextField();
		txt_nombre.setFont(new Font("Comic Sans MS", Font.PLAIN, 11));
		txt_nombre.setForeground(Color.PINK);
		txt_nombre.setBounds(100, 53, 86, 20);
		contentPane.add(txt_nombre);
		txt_nombre.setColumns(10);
		
		JLabel lblApellidos = new JLabel("Apellidos:");
		lblApellidos.setBounds(44, 92, 46, 14);
		contentPane.add(lblApellidos);
		
		textField = new JTextField();
		textField.setForeground(Color.PINK);
		textField.setFont(new Font("Comic Sans MS", Font.PLAIN, 11));
		textField.setBounds(100, 89, 86, 20);
		contentPane.add(textField);
		textField.setColumns(10);
		
		JLabel lblDni = new JLabel("DNI:");
		lblDni.setBounds(226, 57, 46, 14);
		contentPane.add(lblDni);
		
		textField_1 = new JTextField();
		textField_1.setForeground(Color.PINK);
		textField_1.setFont(new Font("Comic Sans MS", Font.PLAIN, 11));
		textField_1.setBounds(262, 54, 86, 20);
		contentPane.add(textField_1);
		textField_1.setColumns(10);
		
		JLabel lblCorreoElectronico = new JLabel("Correo Electronico:");
		lblCorreoElectronico.setBounds(44, 127, 126, 20);
		contentPane.add(lblCorreoElectronico);
		
		textField_2 = new JTextField();
		textField_2.setForeground(Color.PINK);
		textField_2.setFont(new Font("Comic Sans MS", Font.PLAIN, 11));
		textField_2.setBounds(164, 127, 167, 20);
		contentPane.add(textField_2);
		textField_2.setColumns(10);
		
		JButton btnAtras = new JButton("Atras");
		btnAtras.setBounds(97, 210, 89, 23);
		contentPane.add(btnAtras);
		
		JButton btnInscribirse = new JButton("Inscribirse");
		btnInscribirse.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
			}
		});
		btnInscribirse.setBounds(242, 210, 89, 23);
		contentPane.add(btnInscribirse);
		
		JLabel lblTelefono = new JLabel("Telefono:");
		lblTelefono.setBounds(44, 168, 57, 14);
		contentPane.add(lblTelefono);
		
		textField_3 = new JTextField();
		textField_3.setForeground(Color.PINK);
		textField_3.setFont(new Font("Comic Sans MS", Font.PLAIN, 11));
		textField_3.setBounds(100, 165, 86, 20);
		contentPane.add(textField_3);
		textField_3.setColumns(10);
	}
}
