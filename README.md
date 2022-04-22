# Install

Just clone and run `composer install`

# Folder Structure 
```
├── ...
├── app               
│   ├── Contracts           # All Contracts files
│       └── BankInterface   # Bank Interface have 3 method
├── BankApi                 # All abstract and banks defined in this folder
│   ├── JsonApiBanks        # It fetch and process data when bank's respons is json
│   ├── ABank               # Bank class for bank A who extends JsonApiBanks
│   └── Bbank               # Bank class for bank B who extends JsonApiBanks
└── ... 
```

#Get Balance
The route below is for get balance for each bank and response them with sum of them as total
`/api/balance`


# Details

- As where we don't have DataBase, in Controller we add `active_banks` and in `ABank` and `BBank` 
classes we have some config that should be recorded in DB.

- I didn't write any test because we must mock all URL that make no sense here.
