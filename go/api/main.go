package main

import (
	"ddd/api"
	"github.com/go-chi/chi/v5"
	"log"
	"net/http"
)

func main() {
	server := api.NewServer()

	r := chi.NewMux()

	h := api.HandlerFromMux(server, r)

	s := &http.Server{
		Handler: h,
		Addr:    "0.0.0.0:8080",
	}

	log.Fatal(s.ListenAndServe())
}
