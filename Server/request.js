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

function login(username, password, func)
{
	let values = {"username":username, "password":password};
	request(values, func);
}

function request(values, func)
{
	$.ajax({
			url: "../Server/request.php",
			type: "post",
			data: values,
			success: function(response) {
				func(JSON.parse(response));
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
	});
}