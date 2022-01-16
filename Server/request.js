function registerCustomer(room_no, cust_data)
{
	let values = {"request_type":"register_customer", "room_no":room_no, "cust_data":cust_data};
	return request(values);
}

function registerStaff(staff_data)
{
	let values = {"request_type":"register_staff", "staff_data":staff_data};
	return request(values);
}

function customerInformation(customer_id)
{
	let values = {"request_type":"customer_information", "customer_id":customer_information};
	return request(values);
}

function staffInformation(staff_id)
{
	let values = {"request_type":"Staff_information", "staff_id":staff_id};
	return request(values);
}

function isRoomOccupied(room_no)
{
	let values = {"request_type":"is_room_occupied", "room_no":room_no};
	return request(values);
}

function getInvoice(invoice_id)
{
	let values = {"request_type":"get_invoice", "invoice_id":invoice_id};
	return request(values);
}

function getInvoices(func)
{
	let values = {"request_type":"get_invoices"};
	return request(values);
}

function getInvoicesBetween(startDate, endDate)
{
	let values = {"request_type": "get_invoices_between", "start_date":startDate, "end_date":endDate};
	return request(values);
}

async function getInvoicesOfMonth(month, year)
{
	let values = {"request_type":"get_invoices_of_month", "month":month, "year":year};
	return request(values);
}

function register(username, password)
{
	let values = {"request_type": "register", "username":username, "password":password};
	return request(values);
}

function isLoggedIn()
{
	let values = {"request_type":"is_logged_in"};
	return request(values);
}

function login(username, password)
{
	let values = {"request_type":"login", "username":username, "password":password};
	return request(values);
}

function logout()
{
	let values = {"request_type":"logout"};
	return request(values);
}

function createInvoice(customer_id, room_no, days)
{
	let values = {"request_type":"create_invoice", "customer_id":customer_id, "room_no":room_no, "days":days};
	return request(values);
}

async function request(values)
{
	return new Promise((resolve, reject) => {
		$.ajax({
				url: "../Server/request.php",
				type: "post",
				data: values,
				success: function(response) {
					try
					{
						resolve(JSON.parse(response));
					}
					catch(err)
					{
						if(err.name == "SyntaxError")
							reject("There was an error parsing the response : " + response);
						else
							reject(err);
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
		});
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
