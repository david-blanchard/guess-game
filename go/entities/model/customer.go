package model

type Customer struct {
	id      string
	name    string
	address Address
}

func (c *Customer) SetName(name string) {
	c.name = name
}

func (c *Customer) SetAddress(address Address) {
	c.address = address
}

func (c *Customer) GetAddress() Address {
	return c.address
}
