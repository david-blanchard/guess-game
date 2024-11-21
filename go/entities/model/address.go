package model

type Address struct {
	latitude  string
	longitude string
}

func NewAddress(latitude string, longitude string) Address {
	return Address{
		latitude:  latitude,
		longitude: longitude,
	}
}
