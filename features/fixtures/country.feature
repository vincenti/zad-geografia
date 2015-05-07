Feature: Fikstury dla tabeli country

  Scenario: Lista fixtur z tabeli country
    Given I am on "countries.html"
     Then I should see "Ukraine"
      And I should see "603628"
     Then I should see "Poland"
      And I should see "312679"
     Then I should see "Germany"
      And I should see "357021"