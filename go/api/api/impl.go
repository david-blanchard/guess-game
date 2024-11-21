package api

import (
	"encoding/json"
	"net/http"
)

type Server struct{}

func NewServer() Server {
	return Server{}
}

func (Server) ListCustomers(w http.ResponseWriter, r *http.Request) {
	customerName := "John Doe"

	resp := Customer{
		Name: &customerName,
	}

	w.WriteHeader(http.StatusOK)
	_ = json.NewEncoder(w).Encode(resp)
}
