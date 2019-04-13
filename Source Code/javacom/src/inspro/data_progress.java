package inspro;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.alibaba.fastjson.JSONObject;

import comp.utl_datapro;

/**
 * Servlet implementation class data_progress
 */
@WebServlet("/data_progress")
public class data_progress extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public data_progress() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		System.out.println(request.getParameter("id"));
		int id = Integer.parseInt(request.getParameter("id"));
		String cpname   = new String(request.getParameter("cpname").getBytes("ISO8859-1"),"UTF-8");	
		
		utl_datapro utl = new utl_datapro();
		JSONObject json = utl.all_data(id,cpname);
		response.setContentType("text/html;charset=utf-8");
		response.getWriter().println(json);
	}
	
		
	
	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		doGet(request, response);
	}

}
