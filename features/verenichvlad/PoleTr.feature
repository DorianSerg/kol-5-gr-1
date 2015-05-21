+Feature: Obliczenia
+
+  Scenario: Pole trojkata (a*b*0.5)
+    Given I am on homepage
+    When I follow "Pole trojkąta by verenichvlad"
+    And I fill in "a" with "2"
+    And I fill in "b" with "2"
+    And I press "Oblicz"
+    Then I should see "Wynik wynosi 2" 
