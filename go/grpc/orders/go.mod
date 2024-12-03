module github.com/david-blanchard/go-grpc/orders

go 1.23.3

require (
	github.com/david-blanchard/go-grpc/protos/golang/orders v0.0.2
	github.com/david-blanchard/go-grpc/protos/golang/payments v0.0.0-20241201165816-daedacc9a1cd
	github.com/grpc-ecosystem/go-grpc-middleware v1.4.0
	google.golang.org/genproto/googleapis/rpc v0.0.0-20241118233622-e639e219e697
	google.golang.org/grpc v1.68.0
)

require (
	golang.org/x/net v0.29.0 // indirect
	golang.org/x/sys v0.25.0 // indirect
	golang.org/x/text v0.18.0 // indirect
	google.golang.org/protobuf v1.35.2 // indirect
)
