function registerCustomer(room_no, cust_data, func)
{
	let values = {"request_type":"register_customer", "room_no":room_no, "cust_data":cust_data};
	request(values, func);
}

function registerStaff(staff_data, func)
{
	let values = {"request_type":"register_staff", "staff_data":staff_data};
	request(values, func);
}

function isRoomOccupied(room_no, func)
{
	let values = {"request_type":"is_room_occupied", "room_no":room_no};
	request(values, func);
}

function getInvoice(invoice_id, func)
{
	let values = {"request_type":"get_invoice", "invoice_id":invoice_id};
	request(values, func);
}

function getInvoices(func)
{
	let values = {"request_type":"get_invoices"};
	request(values, func);
}

function getInvoicesBetween(startDate, endDate, func)
{
	let values = {"request_type": "get_invoices_between", "start_date":startDate, "end_date":endDate};
	request(values, func);
}

function register(username, password, func)
{
	let values = {"request_type": "register", "username":username, "password":password};
	request(values, func);
}

function isLoggedIn(func)
{
	let values = {"request_type":"is_logged_in"};
	request(values, func);
}

function login(username, password, func)
{
	let values = {"request_type":"login", "username":username, "password":password};
	request(values, func);
}

function logout(func)
{
	let values = {"request_type":"logout"};
	request(values, func);
}

function createInvoice(customer_id, room_no, days, func)
{
	let values = {"request_type":"create_invoice", "customer_id":customer_id, "room_no":room_no, "days":days};
	request(values, func);
}

function request(values, func)
{
	$.ajax({
			url: "../Server/request.php",
			type: "post",
			data: values,
			success: function(response) {
				try
				{
					func(JSON.parse(response));
				}
				catch(err)
				{
					if(err.name == "SyntaxError")
						console.log("There was an error parsing the response : " + response);
					else
						throw err;
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
	});
}

log = function(data) {
	console.log(data);
}

function objectifyForm(formArray) {
    //serialize data function
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
        returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    return returnArray;
}
