import java.io.UnsupportedEncodingException;

import com.auth0.jwt.JWT;
import com.auth0.jwt.JWTVerifier;
import com.auth0.jwt.algorithms.Algorithm;
import com.auth0.jwt.interfaces.DecodedJWT;


public class test {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		System.out.print("Hi\n");

		try {
			
			Algorithm algoHS = Algorithm.HMAC256("Imesety");
			String token = JWT.create()
					.withIssuer("Heli")
					.sign(algoHS);
			
			System.out.print(token);
			/*
			JWTVerifier verifier = JWT.require(algoHS).withIssuer("auth0").build();
			
			DecodedJWT jwt = verifier.verify(token);
			*/
			
		} catch (IllegalArgumentException e) {
			e.printStackTrace();
		} catch (UnsupportedEncodingException e) {
			e.printStackTrace();
		}
		
	}

}
