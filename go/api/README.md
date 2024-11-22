## Install Open API Gen

```
go install github.com/deepmap/oapi-codegen/cmd/oapi-codegen@latest

go mod vender

go get -u github.com/go-chi/chi/v5
```

## Run

```
oapi-codegen --config=cfg.yaml ../api.yaml
```

