package main

import (
	"ddd/model"
	"fmt"
)

func main() {
	// Value objects has no identifies
	// They make your domain rich and also object comparable.
	// They should be immutable

	address := model.NewAddress("some-lat", "some-long")

	c := model.Customer{}
	c.SetAddress(address)

	c2 := model.Customer{}
	c2.SetAddress(address)

	if c.GetAddress() == c2.GetAddress() {
		fmt.Println("The same addresses")
	}
}
