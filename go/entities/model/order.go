package model

type Order struct {
	Items    []Item
	Customer Customer
	Amount   float64
}
